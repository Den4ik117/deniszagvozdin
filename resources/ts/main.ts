const sectionAboutMe = document.querySelector('#about-me');
const sectionMyProject = document.querySelector('#my-projects');
const sectionNavigation = document.querySelector('#navigation');
const sectionSubmit = document.querySelector('#submit-section');
const sectionMain: HTMLElement|null = document.querySelector('#main');
const submitForm: HTMLFormElement|null = document.querySelector('#submit-form');
const timeSpan = document.querySelector('#time-span');
const myWorks = document.querySelector('#my-works');
const activeWork = document.querySelector('#active-work');
const workList = document.querySelector('#work-list');
const titleOutput = document.querySelector('#title-output');
const articleViewport = document.querySelector('#article-viewport');
const successFormText: HTMLSpanElement|null = document.querySelector('#success-form-text');
const errorFormText: HTMLSpanElement|null = document.querySelector('#error-form-text');

const headerButtonMenu = document.querySelector('#header-button-menu');
const headerButtonAboutMe = document.querySelector('#header-button-about-me');
const headerButtonChangeBackground = document.querySelector('#header-button-change-background');
const headerButtonSubmit = document.querySelector('#header-button-submit');
const mainButtonAboutMe = document.querySelector('#main-button-about-me');
const mainButtonMyProjects = document.querySelector('#main-button-my-projects');
const navButtonAboutMe = document.querySelector('#nav-button-about-me');
const navButtonMyProjects = document.querySelector('#nav-button-my-projects');
const navButtonSubmit = document.querySelector('#nav-button-submit');
const aboutButtonClose = document.querySelector('#about-button-close');
const projectsButtonClose = document.querySelector('#projects-button-close');
const submitButtonClose = document.querySelector('#submit-button-close');
const projectsButtonBackward = document.querySelector('#projects-button-backward');

const allCloseButtons = document.querySelectorAll('.button-close');

const backgrounds: string[] = 'backgrounds' in window ? (window.backgrounds as string[]) : [];

let currentBackgroundIndex: number = 0;

interface isOpenSections {
    menu: boolean,
    aboutMe: boolean,
    myProjects: boolean,
    submitForm: boolean
}

const isOpen: isOpenSections = {
    menu: false,
    aboutMe: true,
    myProjects: false,
    submitForm: false
};

const rerender = (): void => {
    if (
        (p.menu && sectionNavigation?.classList.contains('hidden'))
        || (!p.menu && !sectionNavigation?.classList.contains('hidden'))
    ) sectionNavigation?.classList.toggle('hidden');

    if (
        (p.aboutMe && sectionAboutMe?.classList.contains('hidden'))
        || (!p.aboutMe && !sectionAboutMe?.classList.contains('hidden'))
    ) sectionAboutMe?.classList.toggle('hidden');

    if (
        (p.myProjects && sectionMyProject?.classList.contains('hidden'))
        || (!p.myProjects && !sectionMyProject?.classList.contains('hidden'))
    ) sectionMyProject?.classList.toggle('hidden');

    if (
        (p.submitForm && sectionSubmit?.classList.contains('hidden'))
        || (!p.submitForm && !sectionSubmit?.classList.contains('hidden'))
    ) sectionSubmit?.classList.toggle('hidden');
};

// @ts-ignore
const p: isOpenSections = new Proxy<isOpenSections>(isOpen, {
    set: (target: isOpenSections, key: keyof isOpenSections, value: boolean): boolean => {
        const needRerender: boolean = target[key] !== value;

        if (value) {
            target.menu = key === 'menu'
            target.aboutMe = key === 'aboutMe'
            target.myProjects = key === 'myProjects'
            target.submitForm = key === 'submitForm'
        } else
            target[key] = value;

        needRerender && rerender();

        return true;
    }
});

headerButtonMenu?.addEventListener('click', () => p.menu = !p.menu);
headerButtonAboutMe?.addEventListener('click', () => p.aboutMe = !p.aboutMe);
mainButtonAboutMe?.addEventListener('click', () => p.aboutMe = !p.aboutMe);
navButtonAboutMe?.addEventListener('click', () => p.aboutMe = !p.aboutMe);
aboutButtonClose?.addEventListener('click', () => p.aboutMe = false);
headerButtonSubmit?.addEventListener('click', () => p.submitForm = !p.submitForm);
navButtonSubmit?.addEventListener('click', () => p.submitForm = !p.submitForm);
mainButtonMyProjects?.addEventListener('click', () => p.myProjects = !p.myProjects);
navButtonMyProjects?.addEventListener('click', () => p.myProjects = !p.myProjects);
projectsButtonClose?.addEventListener('click', () => p.myProjects = false);
submitButtonClose?.addEventListener('click', () => p.submitForm = false);


allCloseButtons.forEach(closeBtn => {
    closeBtn.addEventListener('click', () => {
        p.menu = false;
        p.aboutMe = false;
        p.myProjects = false;
        p.submitForm = false;
    });
});

const changeBackgroundImage = (): void => {
    currentBackgroundIndex++;

    if (!(currentBackgroundIndex in backgrounds)) {
        currentBackgroundIndex = 0;
    }

    if (sectionMain !== null) {
        sectionMain.style.backgroundImage = `url(${backgrounds[currentBackgroundIndex]})`;
    }
};

headerButtonChangeBackground?.addEventListener('click', changeBackgroundImage);

changeBackgroundImage();

const meta: HTMLMetaElement|null = document.querySelector('meta[name="csrf-token"]');
const token = meta?.content ?? '';

// @ts-ignore
const handleSubmit = async (e: SubmitEvent): Promise<void> => {
    e.preventDefault();

    successFormText?.classList.add('hidden');
    errorFormText?.classList.add('hidden');

    fetch('/', {
        method: 'POST',
        headers: {
            'Accept': 'application/json',
            // 'Content-Type': 'application/json;charset=utf-8',
            'X-CSRF-TOKEN': token
        },
        body: new FormData(e.target as HTMLFormElement)
    }).then((response) => {
        if (!response.ok) {
            return response.json();
        }

        (e.target as HTMLFormElement).reset();

        if (successFormText) {
            successFormText.textContent = 'Вы успешно оставили заявку! В течение суток отвечу на указанную почту.';
            successFormText.classList.remove('hidden');
        }

        return null;
    }).then(data => {
        if (data !== null && errorFormText) {
            errorFormText.textContent = data.message;
            errorFormText.classList.remove('hidden');
        }
    }).catch(() => {
        if (errorFormText) {
            errorFormText.textContent = 'При отправке формы произошла неизвестная ошибка. Пожалуйста, перезагрузите страницу и попробуйте отправить форму повторно.';
            errorFormText.classList.remove('hidden');
        }
    });
};

submitForm?.addEventListener('submit', handleSubmit);

const zerofize = (part: number): string => part < 10 ? '0' + part : part.toString();

const actualizeTime = (): void => {
    const date = new Date();

    if (timeSpan !== null) {
        timeSpan.textContent = `${zerofize(date.getHours())}:${zerofize(date.getMinutes())}`;
    }
};

setInterval(actualizeTime, 5000);

let currentWork: HTMLElement|null = null;

workList?.addEventListener('click', (event) => {
    const button: HTMLElement|null = (event.target as HTMLElement).closest('.work');

    if (!button || !myWorks || !activeWork || !titleOutput) return;

    const { target = 'article-1', title = 'Заголовок не указан' } = button.dataset;
    const work: HTMLElement|null|undefined = articleViewport?.querySelector(target);

    if (!work) return;

    myWorks.classList.toggle('grid');
    myWorks.classList.toggle('hidden');

    workList.classList.toggle('grid');
    workList.classList.toggle('hidden');

    work.classList.toggle('hidden');

    titleOutput.textContent = title;

    activeWork.classList.toggle('grid');
    activeWork.classList.toggle('hidden');

    currentWork = work;
});

projectsButtonBackward?.addEventListener('click', () => {
    currentWork?.classList.toggle('hidden');

    currentWork = null;

    myWorks?.classList.toggle('grid');
    myWorks?.classList.toggle('hidden');

    workList?.classList.toggle('grid');
    workList?.classList.toggle('hidden');

    activeWork?.classList.toggle('grid');
    activeWork?.classList.toggle('hidden');
});

actualizeTime();

rerender();

export {};
